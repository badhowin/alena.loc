import React, { Component } from 'react';

import GalleriesList from "../pages/galleries-list";
import AddGalleryPage from "../pages/add-gallery-page";
import AddGalleryArticle from "../pages/add-gallery-article";

export default class ContentBox extends Component {

    state = {
        currentPage: 'galleries',
    }

    pageAddGalleryShow = () => {
        this.setState({
            currentPage: 'addGallery',
        })
    }

    render() {
        const { currentPage } = this.state;

        let output = null;

        switch (currentPage) {
            case 'galleries':
                output = <GalleriesList pageAddGallegyShow = { this.pageAddGalleryShow }/>;
                break;
            case 'addGallery':
                output = <AddGalleryPage />;
                break;
            case 'addArticle':
                output = <AddGalleryArticle />;
                break;
            default:
                output = <GalleriesList />;
                break;
        }

        return ( output );
    };
}
