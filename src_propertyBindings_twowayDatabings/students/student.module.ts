import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { StudentComponent } from './student.components';
import { FormsModule } from '@angular/forms';
@NgModule({
 declarations:[StudentComponent],
 imports:[BrowserModule,FormsModule],
 providers:[],
 bootstrap:[StudentComponent]
})

export class StudentModule{}