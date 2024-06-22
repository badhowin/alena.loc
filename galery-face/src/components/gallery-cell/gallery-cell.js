import React, { Component } from 'react';
import './thumb-buttons.css';
import GalleryService from "../../services/gallery-service";

export default class GalleryCell extends Component {

render() {

    const  { msgBoxShow, tmbId,  header, group, tmbImg} = this.props;
    const imgLink = `gallery\\${ tmbImg }`;
    const galleryService = new GalleryService();

    return (
        <article key = { tmbId }>
            <div className="gallery-thumb-wrapper">

                    <img src={ imgLink } alt="" />
                    <div className="thumb-caption">
                        <p>
                            { header } <br />
                            <span className="format">
                                { group }
                            </span>
                        </p>
                    </div>

                <div className="thumb-buttons-wrapper">
                    <div
                        className="thumb-button btn-delete"
                        onClick = { () => msgBoxShow( tmbId )  }
                    ><span>Delete</span></div>
                    <div
                        className="thumb-button btn-edit"
                        onClick = { () =>  galleryService.editGallery( tmbId ) }
                    ><span>Edit</span></div>
                </div>
            </div>
        </article>
    )};
}