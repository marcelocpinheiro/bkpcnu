import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HeaderModule } from './header/header.module';
import { SearchBarModule } from './search-bar/search-bar.module';
import { MenuBarModule } from './menu-bar/menu-bar.module';
import { SearchInputModule } from './search-input/search-input.module';
import { SliderModule } from './slider/slider.module';
import { ShortcutModule } from './shortcut/shortcut.module';
import { MegamenuModule } from './megamenu/megamenu.module';
import { MegamenuWindowModule } from './megamenu-window/megamenu-window.module';



@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    HeaderModule,
    SearchBarModule,
    SearchInputModule,
    SliderModule,
    ShortcutModule,
    MegamenuModule,
    MegamenuWindowModule
  ],
  exports: [
    HeaderModule,
    SearchBarModule,
    MenuBarModule,
    SearchInputModule,
    SliderModule,
    ShortcutModule,
    MegamenuModule,
    MegamenuWindowModule
  ]
})
export class ComponentsModule { }
