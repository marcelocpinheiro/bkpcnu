import { Component, OnInit } from '@angular/core';
import { MegamenuService } from 'src/app/services/megamenu-service/megamenu.service';

@Component({
  selector: 'app-megamenu',
  templateUrl: './megamenu.component.html',
  styleUrls: ['./megamenu.component.scss']
})
export class MegamenuComponent implements OnInit {

  public menus: any;
  constructor(public service: MegamenuService) { }

  ngOnInit() {
    this.service.getMenuStructure().subscribe(ret => {
      this.menus = ret;
    });
  }

  openMenu(index){
    this.service.setMenuStatus(this.menus[index]);
  }

  closeMenu(){
    this.service.setMenuStatus(false);
  }

}
