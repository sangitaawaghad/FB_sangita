
import {Pipe,PipeTransform} from '@angular/core';
    
@Pipe({
   name:'salutation' 
})
    
export class SalutationPipe implements PipeTransform {
    /*transform(value:string,gender:string):any{
        if(gender === "Male"){
            return "Mr."+value; 
        }else{
            return "Ms."+value;
        }
    }*/
    transform(value:string,gender:string):any{
      
        if(gender === "Male"){
            return "Mr."+value; 
        }
        if(gender === "FeMale"){
            return "Ms."+value;
        }
    }
}
