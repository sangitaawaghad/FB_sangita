import { Component } from '@angular/core'
@Component({
    'selector':'student-list',
    'templateUrl':'./student-list.component.html',
    'styleUrls':['./student-list.component.css']
    })
export class StudentListComponent{
 students :any [] =[
     {
        'id':1,
        'name':'A',
        'gender':'M',
        'dob':'27-09-1990',
     },
     {
        'id':2,
        'name':'B',
        'gender':'F',
        'dob':'07-10-1986',
     },
     {
        'id':3,
        'name':'C',
        'gender':'F',
        'dob':'01-04-1993',
     }
 
      
 ]
 
 
  
}
