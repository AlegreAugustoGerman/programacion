/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package teoriajavaprogramacióngenerica;

/**
 *
 * @author l2k49
 * @param <T>
 */
public class Generico<T>{
        private T valorGenerico;
        
        public Generico(){
            valorGenerico=null;
        }
        public void setValorGenerico(T ValorGenerico){valorGenerico=ValorGenerico;}
        public T getValorGenerico(){return valorGenerico;}
        
    }


