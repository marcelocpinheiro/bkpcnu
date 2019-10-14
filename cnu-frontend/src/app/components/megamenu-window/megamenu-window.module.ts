import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MegamenuWindowComponent } from './megamenu-window.component';



@NgModule({
  declarations: [MegamenuWindowComponent],
  imports: [
    CommonModule
  ],
  exports: [
    MegamenuWindowComponent
  ]
})
export class MegamenuWindowModule { }
