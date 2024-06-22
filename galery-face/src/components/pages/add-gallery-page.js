import React, { Component } from 'react';
import './add-gallery-page.css';
import UploadImg from "../../services/upload-img";
import Article from "../article";
import GalleryService from "../../services/gallery-service";

export default class AddGalleryPage extends Component{

    state = {
        imgToUpload: null,
        fileList: [],
        uniqueKeys: [],
    }

    uploadImg = new UploadImg();

    galleryService = new GalleryService();

    loadImg = () => {
       this.uploadImg.laodImages();
    }



    imageChoosed = (e) => {

        const newFiles = Array.from(e.target.files);
        const oldFiles = this.state.fileList;
        console.log(newFiles, oldFiles);

        this.setState({
            fileList: [ ...oldFiles, ...newFiles ],
        });

    }

    deleteImg = (file) => {
        const currentImgs = this.state.fileList;
        const newImgs = currentImgs.filter((item)=>{
            return item !== file;
        });
        this.setState({
            fileList: newImgs,
        });
    }


    wrapImageListToComponent = (fileList) => {

        let imgList = null;
        let newUniqueKeys = [];

        if (fileList && fileList.length) {
            imgList = fileList.map((file) => {

                const uniqueKey = this.galleryService.getRandomKey();

                newUniqueKeys.push(uniqueKey);

                return <Article key={ uniqueKey } file={file} deleteImg = { ()=>this.deleteImg(file) } />;
            });
        }
        return imgList;
    }



    render() {
        return (
            <div className='add-gallery-page-wrapper'>
                <div className='gallery-main-data'>
                    <div className='gallery-main-image'>
                        Please, load image
                    </div>
                    <div className='main-data-fields'>
                        <input placeholder='Header' />
                        <input placeholder='Project type' />
                        <textarea className='gallery-main-text' placeholder='Main text' />
                    </div>
                </div>
                <div className='add-images-button' onClick={ this.loadImg }>Add images</div>

                <UploadImg imageChoosed = { this.imageChoosed }/>

                <div className='added-articles-list'>
                    { this.wrapImageListToComponent(this.state.fileList) }
                </div>
            </div>
        );
    }

}