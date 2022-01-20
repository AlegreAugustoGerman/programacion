import React, {Component,useState} from 'react';
 
import Logo from '../Assets/img/Logo.jpg';
import ListNavTitleHeader from './ListNavTitleHeader';
import ListNavUserHeader from './ListNavUserHeader';
import ListNavSocialHeader from './ListNavSocialHeader';
import ListNavUserAccount from './ListNavUserAccount';
 
export class Menu extends Component {
    constructor(props){ 
    super(props);
     
     
  
  
  }
     
      
    
    
    
    
      render(){
        return( 
          <React.Fragment>
   
    <header ClassName="header" style={{backgroundColor:'rgba(52, 52, 52, 0.8)'}}>
        <img src={Logo} className="header-img"/>
        <nav className="header__nav flex wrap ">
            <ListNavTitleHeader {...this.props.ListNavTitleHeader}/>
            <ListNavUserHeader/>
            <ListNavSocialHeader/>
            <ListNavUserAccount/>
        </nav>
    </header>
         </React.Fragment>  
         );
      }
    }

export default Menu;