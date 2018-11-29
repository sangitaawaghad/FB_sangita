
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { StudentComponent } from './student.component'
import { StudentListComponent } from './student-list/student-list.component'



/*$("#btn").click(function(){
    
})*/


@NgModule({
   
  declarations: [ //includes name of all the components want to use
   StudentComponent,
   StudentListComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [StudentComponent]
})    
export class StudentModule{
    
    
    
}