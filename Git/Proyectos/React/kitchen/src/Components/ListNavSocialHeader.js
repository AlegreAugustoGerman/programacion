import React, {Component,useState} from 'react';
 
export class ListNavSocialHeader extends Component {
    constructor(props){ 
    super(props);
     
     
  
  
  }
     
      
    
    
    
    
      render(){
        return( 
          <React.Fragment>
            <ol className="nav__list-header itcenter flex wrap mp start">
                <li className="list__item-header"><a href="" className="item__link-header">Facebook</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">Instagram</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">TikTok</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">Twitter</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">Twich</a></li>
            </ol>
         </React.Fragment>  
         );
      }
    }

export default ListNavSocialHeader;