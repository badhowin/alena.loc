import React, { Component } from 'react';
import { BtnEdit, BtnDelete } from "./article-action-buttons";


import './article.css';

export default class Article extends Component {


    state = {
        file: null,
        img: null,
    }

    imgShow = () => {
        let reader = new FileReader();
        let file = this.props.file;

        reader.onloadend = () => {
            this.setState({
                file: file,
                img: reader.result
            });
        }
        reader.readAsDataURL(file)
    }

    componentDidMount() {
        this.imgShow();
    }

    render() {
        return (
            <div className='added-article'>
                <div className='added-picture'>
                    <img src={ this.state.img } alt='sample img'/>
                </div>
                <div className='action-btn-wrapper'>
                    <BtnDelete deleteImg = { this.props.deleteImg } />
                    <BtnEdit/>
                </div>
            </div>
        )
    }
}