import React, {Component} from 'react';
 
import SectionButton from './SectionButton';
import SectionSearch from './SectionSearch';
export class SectionButtonsSelect extends Component{
    constructor(props){
        super(props);
    }
  

    render(){return(
        <React.Fragment>
         <section class="section-select">
                <ol class="section__list-select flex center">
                <SectionButton {...this.props.SectionButton} />
                <SectionSearch {...this.props.SectionSearch} />
               
                </ol>
        </section>
        </React.Fragment>
    );}
    }
    export default SectionButtonsSelect;