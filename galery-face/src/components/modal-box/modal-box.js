import React, { Component } from 'react';
import './modal-box.css'
export default class ModalBox extends Component {
    render(){

        const { msgBoxHide, deleteAccepted, } = this.props;

        return (

              <div className="modal-box">
                  <div
                      className="message-box"
                      onClick = { msgBoxHide }
                  >
                      <div className='message-text-wrapper'>
                          <div className='message-text-header'>
                              Delete
                          </div>
                          <div className='message-text-content'>
                              Do you really want to delete this gallery?
                          </div>
                          <div className='mesage-button-wrapper'>
                              <div className='mesage-button mesage-button-yes'
                                    onClick = { deleteAccepted } >Yes</div>
                              <div className='mesage-button mesage-button-no'>No</div>
                          </div>
                      </div>

                  </div>
              </div>

        );
    }
}