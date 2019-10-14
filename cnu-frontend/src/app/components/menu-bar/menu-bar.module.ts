import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MenuBarComponent } from './menu-bar.component';
import { MegamenuModule } from '../megamenu/megamenu.module';



@NgModule({
  declarations: [MenuBarComponent],
  imports: [
    CommonModule,
    MegamenuModule
  ],
  exports: [
    MenuBarComponent
  ]
})
export class MenuBarModule { }
