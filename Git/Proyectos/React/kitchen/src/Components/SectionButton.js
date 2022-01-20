import React, {Component} from 'react';
import '../index.css';

export class SectionButton extends Component{
    constructor(props){
        super(props);
    }
  

    render(){return(
        <React.Fragment>
<li class="list__item-select">
<button class="item__button-select" >
    {this.props.CRecipe}</button></li>

    <li class="list__item-select">
<button class="item__button-select" >
    {this.props.URecipe}</button></li>

</React.Fragment>
);}
}
export default SectionButton;