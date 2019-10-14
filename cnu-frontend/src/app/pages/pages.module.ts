import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HomeModule } from './home/home.module';
import { PageFinderModule } from './page-finder/page-finder.module';



@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HomeModule,
    PageFinderModule
  ],
  exports: [
    HomeModule,
    PageFinderModule
  ]
})
export class PagesModule { }
