import { Component, OnInit } from '@angular/core';
import { ShortcutService } from 'src/app/services/shortcut-service/shortcut.service';

@Component({
  selector: 'app-shortcut',
  templateUrl: './shortcut.component.html',
  styleUrls: ['./shortcut.component.scss']
})
export class ShortcutComponent implements OnInit {

  public shortcutTypes: any;
  public shortcuts: any;
  public activeType = 0;

  constructor(public shortcutService: ShortcutService) { }

  ngOnInit() {
    this.shortcutService.getShortcutTypes().subscribe((ret) => {
      this.shortcutTypes = ret;
      this.setActiveType(this.shortcutTypes[0].id);
    });
  }

  public setActiveType(id){
    this.activeType = id;
    this.shortcutService.getShortcutsByType(this.activeType).subscribe(ret => {
      this.shortcuts = ret;
    });
  }

}
