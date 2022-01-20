import React, {Component} from 'react';
import '../index.css';

export class SectionList extends Component{
    constructor(props){
        super(props);
    }
  

render(){return( 
<React.Fragment>
        <section class="section-recipes flex evenly wrap itcenter">
        <ol class="section__list mp">
            <h3 class="list__title-section">{this.props.titlesection}</h3>
            <li class="list__item-section">
            <img src={this.props.imgsection} class="item__img-section"></img>
                    <p class="img__description-section">{this.props.descriptionsection}</p>
                    <a href="" class="img__link-section">{this.props.linksection}</a>
            </li>
        </ol>
        </section>
</React.Fragment>
);}
}
export default SectionList;