import { Component } from '@angular/core';

@Component({
   selector:'student-root',
   templateUrl:'./student.component.template.html'
})
 export class StudentComponent{
   title:string='Welcome to angualar Js';
   isDisabled:boolean=false;
}