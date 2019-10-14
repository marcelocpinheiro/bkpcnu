import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MegamenuComponent } from './megamenu.component';



@NgModule({
  declarations: [MegamenuComponent],
  imports: [
    CommonModule
  ],
  exports: [
    MegamenuComponent
  ]
})
export class MegamenuModule { }
