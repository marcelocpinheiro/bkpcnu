import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HeaderComponent } from './header.component';
import { SearchBarModule } from '../search-bar/search-bar.module';
import { MenuBarModule } from '../menu-bar/menu-bar.module';
import { MegamenuWindowModule } from '../megamenu-window/megamenu-window.module';



@NgModule({
  declarations: [HeaderComponent],
  imports: [
    CommonModule,
    SearchBarModule,
    MenuBarModule,
    MegamenuWindowModule
  ],
  exports: [
    HeaderComponent
  ]
})
export class HeaderModule { }
