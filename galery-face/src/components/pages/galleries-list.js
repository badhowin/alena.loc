import React, { Component } from 'react';
import GalleryService from "../../services/gallery-service";
import ModalBox from "../modal-box";
import GalleryCell from "../gallery-cell";
import './galleries-list.css';

export default class GalleriesList extends Component {

    state = {
        isMessageBoxVisible: false,
        galleryId: null,
        galleries: [],
    }



    msgBoxShow = (galleryId) => {
        this.setState({
            isMessageBoxVisible: true,
            galleryId: galleryId,
        });
    }

    msgBoxHide = () => {
        this.setState({
            isMessageBoxVisible: false,
            galleryId: null,
        });
    }

    deleteGallery = () => {
        const currentGalleries = this.state.galleries;
        const currentItemId = this.state.galleryId;

        const newGalleries =  currentGalleries.filter((item)=>{
            return (item.id !== currentItemId);
        });
        this.setState({
            galleries: newGalleries,
        });
    }

    componentDidMount() {
        const galleryService = new GalleryService();
        this.setState({
            galleries: galleryService.getAllGalleries(),
        });
    }

    render() {

        const { isMessageBoxVisible } = this.state;
        const msgBox = isMessageBoxVisible ?  <ModalBox msgBoxHide = { this.msgBoxHide } deleteAccepted = { this.deleteGallery } /> : null;


        const items = this.state.galleries;

        const galleries = items.map((item)=> {
            return (
                <GalleryCell
                    key = { item.id }
                    tmbId = { item.id }
                    header = { item.header }
                    group = { item.group }
                    tmbImg = { item.tmbImg }
                    msgBoxShow = { this.msgBoxShow }
                />)
        });

        return (
            <div className="gallery-wrapper">
                <div className='add-button' onClick={ this.props.pageAddGallegyShow }>Add new gallery</div>
                { galleries }
                { msgBox }
            </div>);
    };

}