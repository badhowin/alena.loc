import React, { Component } from 'react';
import './upload-img.css';
import $ from 'jquery';

export default class UploadImg extends Component {

    laodImages = () => {
        $('#img-input').trigger('click');
    }


    render() {
        return (
            <form encType="multipart/form-data" method="post">
                <p><input id="img-input" type="file" name="photo" multiple accept="image/*"  onChange={ (e) => this.props.imageChoosed(e) }/></p>
            </form>
        )
    }
}