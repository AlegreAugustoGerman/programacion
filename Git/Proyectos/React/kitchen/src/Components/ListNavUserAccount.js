import React, {Component,useState} from 'react';
 
export class ListNavUserAccount extends Component {
    constructor(props){ 
    super(props);
     
     
  
  
  }
     
      
    
    
    
    
      render(){
        return( 
          <React.Fragment>
            <ol className="nav__list-header itcenter flex wrap mp end">
                <li className="list__item-header"><a href="" className="item__link-header">Profile</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">My Recipes</a></li>
                <li className="list__item-header"><a href="" className="item__link-header">Publication</a></li>
            </ol>
         </React.Fragment>  
         );
      }
    }

export default ListNavUserAccount;