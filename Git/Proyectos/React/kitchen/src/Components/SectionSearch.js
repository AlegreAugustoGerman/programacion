import React, {Component} from 'react';
import '../index.css';

export class SectionSearch extends Component{
    constructor(props){
        super(props);
    }
  

    render(){return(
        <React.Fragment>
<li class="list__item-select"> 
<input class="item__button-select" type="search" placeholder={this.props.search}>
</input></li>
</React.Fragment>
);}
}
export default SectionSearch;