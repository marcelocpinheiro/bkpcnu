import { Injectable } from '@angular/core';
import { CommonService } from '../common-service/common-service.service';

@Injectable({
  providedIn: 'root'
})
export class ShortcutService {

  constructor(public common: CommonService) {}

  public getShortcutTypes(){
    return this.common.get('shortcut-types');
  }

  public getShortcutsByType(shortcutTypeId){
    return this.common.get('shortcuts/' + shortcutTypeId);
  }
}
