/*import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})*/



import { Component } from '@angular/core';
@Component({
    selector:'student-root',
    //template:'<student-list></student-list>',
    templateUrl:'./student.component.html',
    styleUrls: ['./student.component.css']
})
export class StudentComponent {
  badHtml :string = "<script>alert('hello');</script>"
  title :string = 'This is Title';
  tnumber :number = 2.5;
  status: boolean = true;
  anyType:any = '1';
  isDisable :boolean =true;
  imgPath = "https://www.clearcarrental.com/images/clearcarrental_logo.png";
}
