
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { StudentComponent } from './student.component'
import { StudentListComponent } from './student-list/student-list.component'
import { FormsModule } from '@angular/forms';


/*$("#btn").click(function(){
    
})*/


@NgModule({
   
  declarations: [ //includes name of all the components want to use
   StudentComponent,
   StudentListComponent
  ],
  imports: [
    BrowserModule,
    FormsModule 
  ],
  providers: [],
  bootstrap: [StudentComponent]
})    
export class StudentModule{
     
}