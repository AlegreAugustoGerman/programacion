import React, {Component} from 'react';
 

export class ListNavTitleHeader extends Component{
    constructor(props){
            super(props);
    }
 

render(){return(
<React.Fragment>

 

            <ol className="nav__list-header itcenter flex wrap mp start">
                <li className="list__item-header"><a href="" className="item__link-header Logo">{this.props.title}<p className="icon-home"></p> </a></li>
            </ol>
  
</React.Fragment>
);}
}
export default ListNavTitleHeader;