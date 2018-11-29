import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html'
})
export class AppComponent {
  //numberOne = "2";
  //numberTwo ="6";
	
   // numberOne:Number  = '0xf00d';
   //numberOne:string  = '0xf00d';
 //  numberOne = '0xf00d';
	//console.log("q");
   	//numberArray:Number[] = [1,2,3,4,5];	
   	//numberArray:Number = [1,2,3,4,5];	
   //	numberArray:Number[] = ["1","2",3,4,5];	
    employees :any[]= [
	{
	 "id":"Emp-1",
	 "name" :"A",
	 "salary" :5.55555,
	 "dob" :'1/17/2017 05:30:55' , //Month date year
	 "loginTime" :'05:30:00'
	},
	{
	 "id":"Emp-3",
	 "name" :"B",
     "salary" :50000 ,
	 "dob" :'8/6/1990',
	 "loginTime" :'05:30:00'
	}
	]
  }

  //Component
  //Nesting Component
  //Styling Component
  