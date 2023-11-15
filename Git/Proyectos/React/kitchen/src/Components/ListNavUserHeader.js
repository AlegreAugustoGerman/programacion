import React, {Component,useState} from 'react';
 
export class ListNavUserHeader extends Component {
    constructor(props){ 
    super(props);
     
     
  
  
  }
     
      
    
    
    
    
      render(){
        return( 
          <React.Fragment>
   
            <ol className="nav__list-header itcenter flex wrap mp end">
                <li className="list__item-header"><a href="" className="item__link-header">All Recipes</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">About </a></li>
                <li className="list__item-header"><a href="" className="item__link-header">Challenges</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">?</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">Login</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">Create</a></li>
            </ol>
         </React.Fragment>  
         );
      }
    }

export default ListNavUserHeader;