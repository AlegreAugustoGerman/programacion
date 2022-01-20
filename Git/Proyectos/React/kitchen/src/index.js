import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import reportWebVitals from './reportWebVitals';
import Menu from './Components/Menu';
import SectionButtonsSelect from './Components/SectionButtonsSelect';
const propiedades={
  ListNavTitleHeader:{title:"Kitchen in House"},
  SectionButton:{CRecipe:"Chef Recipes",URecipe:"User Recipes"},
  SectionSearch:{search:"Search Recipe"}
};

/*
let ModProppiedades={
  SectionButtonsSelect:{cantidad:0}
};
setInterval(() => {
  ModProppiedades={
    SectionButtonsSelect:{
      ...ModProppiedades.SectionButtonsSelect,
      cantidad:ModProppiedades.SectionButtonsSelect.cantidad + 1
    }
  }
 

  ReactDOM.render(
    <React.StrictMode>
    <Menu {...propiedades} />
    <SectionButtonsSelect {...propiedades}{...ModProppiedades} />
    </React.StrictMode>,
    document.getElementById('root')
  );
}, 1000);
 */
 
 
reportWebVitals();
