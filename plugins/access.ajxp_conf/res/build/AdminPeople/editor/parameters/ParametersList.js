/*
 * Copyright 2007-2017 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
 * This file is part of Pydio.
 *
 * Pydio is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pydio is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <https://pydio.com>.
 */

'use strict';

Object.defineProperty(exports, '__esModule', {
    value: true
});

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { 'default': obj }; }

var _ParamsMixins = require('./ParamsMixins');

var _ParamsMixins2 = _interopRequireDefault(_ParamsMixins);

var _utilMessagesMixin = require('../util/MessagesMixin');

var _ParameterEntry = require('./ParameterEntry');

var _ParameterEntry2 = _interopRequireDefault(_ParameterEntry);

exports['default'] = React.createClass({
    displayName: 'ParametersList',

    mixins: [_ParamsMixins2['default'], _utilMessagesMixin.RoleMessagesConsumerMixin],

    propTypes: {
        id: React.PropTypes.string,
        role: React.PropTypes.object,
        roleParent: React.PropTypes.object,
        pluginsFilter: React.PropTypes.func,
        paramsFilter: React.PropTypes.func,
        showInherited: React.PropTypes.bool,
        Controller: React.PropTypes.object
    },

    getInitialState: function getInitialState() {
        return { showInherited: this.props.showInherited !== undefined ? this.props.showInherited : true };
    },

    componentWillReceiveProps: function componentWillReceiveProps(newProps) {
        if (newProps.showInherited !== undefined) {
            this.setState({ showInherited: newProps.showInherited });
        }
    },

    toggleInherited: function toggleInherited() {
        this.setState({ showInherited: !this.state.showInherited });
    },

    render: function render() {

        var roleParent = this.props.roleParent;
        var showInherited = this.state.showInherited;
        var controller = this.props.Controller;
        var wsId = this.props.id;
        var oThis = this;
        var render = function render(pluginName, paramName, paramValue, paramAttributes, inherited, type) {
            if (inherited && !showInherited) {
                return null;
            }
            var label = paramAttributes['label'] || paramName;
            if (global.pydio && global.pydio.MessageHash && global.pydio.MessageHash[label]) {
                label = global.pydio.MessageHash[label];
            }
            if (type == 'action') {
                paramAttributes['type'] = 'boolean';
                label = oThis.context.getMessage('7').replace('%s', label);
            }
            return React.createElement(_ParameterEntry2['default'], {
                id: wsId,
                type: type,
                key: pluginName + "-" + paramName,
                name: paramName,
                label: label,
                value: paramValue,
                attributes: paramAttributes,
                inherited: inherited,
                pluginName: pluginName,
                Controller: controller
            });
        };

        var parameters = this.browseParams(this.props.role.PARAMETERS, this.props.roleParent.PARAMETERS, this.props.id, render, this.props.pluginsFilter, 'parameter', true, true);

        var actions = this.browseParams(this.props.role.ACTIONS, this.props.roleParent.ACTIONS, this.props.id, render, this.props.pluginsFilter, 'action', true, true);

        if (!parameters[0].length && !actions[0].length && !this.state.showInherited) {
            return React.createElement(
                'table',
                { className: 'parameters-list', style: { width: '100%' } },
                React.createElement(
                    'tbody',
                    null,
                    React.createElement(
                        'tr',
                        { colSpan: 3 },
                        React.createElement(
                            'td',
                            { className: 'empty-entry' },
                            this.context.getMessage('1')
                        )
                    )
                )
            );
        }

        return React.createElement(
            'table',
            { className: 'parameters-list', style: { width: '100%' } },
            React.createElement(
                'tbody',
                null,
                parameters[0],
                actions[0],
                parameters[1],
                actions[1]
            )
        );
    }

});
module.exports = exports['default'];
