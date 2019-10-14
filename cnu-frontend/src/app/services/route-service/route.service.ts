import { Injectable } from '@angular/core';
import { CommonService } from '../common-service/common-service.service';

@Injectable({
  providedIn: 'root'
})
export class RouteService {

  constructor(public common: CommonService) { }

  public getRoute(route: String){
    return this.common.get('route', {route: route});
  }
}
