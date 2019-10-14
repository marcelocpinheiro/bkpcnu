import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { PageFinderComponent } from './page-finder.component';



@NgModule({
  declarations: [PageFinderComponent],
  imports: [
    CommonModule
  ],
  exports: [
    PageFinderComponent
  ]
})
export class PageFinderModule { }
