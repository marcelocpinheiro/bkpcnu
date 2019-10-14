import { Component, OnInit } from '@angular/core';
import { MegamenuService } from 'src/app/services/megamenu-service/megamenu.service';

@Component({
  selector: 'app-megamenu-window',
  templateUrl: './megamenu-window.component.html',
  styleUrls: ['./megamenu-window.component.scss']
})
export class MegamenuWindowComponent implements OnInit {

  public data: any;
  public lastData: any;
  constructor(public service: MegamenuService) { }

  ngOnInit() {
    this.service.observeMenuStatus().subscribe(ret => {
      this.data = ret;
      this.lastData = ret;
    });
  }

  show(){
    this.service.setMenuStatus(this.lastData);
  }

  cancel(){
    this.service.setMenuStatus(false);
  }

}
