import { Injectable } from '@angular/core';
import { CommonService } from '../common-service/common-service.service';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class MegamenuService {

  public menuStatus = new BehaviorSubject<any>(false);
  constructor(public common: CommonService) { }

  public getMenuStructure(){
    return this.common.get('menu-list');
  }

  public setMenuStatus(data){
    this.menuStatus.next(data);
  }

  public observeMenuStatus(){
    return this.menuStatus.asObservable();
  }
}
