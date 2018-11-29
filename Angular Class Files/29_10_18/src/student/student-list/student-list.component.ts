/*import { Component } from '@angular/core'
@Component({
    'selector':'student-list',
    'templateUrl':'./student-list.component.html',
    'styleUrls':['./student-list.component.css']
    })
export class StudentListComponent{
    boldVar :string = "bold";
    isRed:boolean = true;
    isYellow:boolean = true;
    size :string = "5px";
    sizeNumber :number =5;
    students :any [] =[
     {
        'id':1,
        'name':'A',
        'gender':'M',
        'dob':'27-09-1990',
        'weight':'bold',
        'isBold':true,
        'colorClass':'yellowColor'
     },
     {
        'id':2,
        'name':'B',
        'gender':'F',
        'dob':'07-10-1986',
        'weight':'normal',
         'isBold':false,
        'colorClass':'redColor'
     },
     {
        'id':3,
        'name':'C',
        'gender':'F',
        'dob':'01-04-1993',
        'weight':'bold',
         'isBold':false,
         'colorClass':'yellowColor'
     }
 ];
  demo(){
  
  }
}*/

import { Component } from '@angular/core';

@Component({
    'selector':'student-list',
    'templateUrl':'./student-list.component.html',
    'styleUrls':['./student-list.component.css']
})
export class StudentListComponent {
    students: any[];
    cuurent_Date:number = Date.now();
    constructor() {
           this.students = [
            {
                code: 'std101', name: 'Tom', gender: 'MALE',
                dateOfBirth: '2/6/1998 00:00:00',
                marks: 135,
                cost: 135,
                
            },
            {
                code: 'std102', name: 'Alex', gender: 'MALE',
                dateOfBirth: '9/6/1982',
                marks: 13500,
                cost: 135,
            },
            {
                code: 'std103', name: 'Mike', gender: 'Male',
                dateOfBirth: '12/8/1979',
                marks: 135,
                cost: 135,
            },
            {
                code: 'std104', name: 'Mary', gender: 'FeMALE',
                dateOfBirth: '10/10/1980',
                marks: 135,
                cost: 12.1111111,
            },
        ];
    }
    getStudents(): void {
            
            this.students = [
            {
                code: 'std101', name: 'Tom', gender: 'Male',
                 dateOfBirth: '25/6/1988'
            },
            {
                code: 'std102', name: 'Alex', gender: 'Male',
                dateOfBirth: '9/6/1982'
            },
            {
                code: 'std103', name: 'Mike', gender: 'Male',
                dateOfBirth: '12/8/1979'
            },
            {
                code: 'std104', name: 'Mary', gender: 'FeMALE',
                dateOfBirth: '14/10/1980'
            },
            {
                code: 'std105', name: 'Nancy', gender: 'FeMALE',
                dateOfBirth: '15/12/1982'
            },
            {
                code: 'std106', name: 'Nancy', gender: 'FeMALE',
                dateOfBirth: '15/12/1982'
            },
            {
                code: 'std107', name: 'Nancy', gender: 'FeMALE',
                dateOfBirth: '15/12/1982'
            },
        ];
    }
    trackByStdCode(index: number, student: any): string {
        console.log(index);
        return student.code;
    }
    /*trackByStdCode(student:any):string{
       //return this.students[index].code
         return student.code;
    }*/
    
    /*callMe():void{
      this.students = [  {
                code: 'std101', name: 'Tom', gender: 'Male',
                 dateOfBirth: '25/6/1988'
            }
        ] ;  
    }*/
}






