import { Injectable } from '@angular/core';
import { CommonService } from '../common-service/common-service.service';


@Injectable({
  providedIn: 'root'
})
export class SlideService {

  constructor(private common: CommonService) { }

  public getSlides(){
    return this.common.get('sliders');
  }
}
