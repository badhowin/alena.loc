import React, { Component } from 'react';
import './btn-delete.css';

export default class BtnDelete extends Component {
    render() {
        return (
            <div className="article-btn-delete" onClick={ this.props.deleteImg }> Del</div>
        )
    }
}