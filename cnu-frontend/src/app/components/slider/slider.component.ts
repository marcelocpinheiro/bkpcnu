import { Component, OnInit } from '@angular/core';
import { SlideService } from '../../services/slide-service/slide-service.service';

@Component({
  selector: 'app-slider',
  templateUrl: './slider.component.html',
  styleUrls: ['./slider.component.scss']
})
export class SliderComponent implements OnInit {

  public slides: any;
  public activeSlide = 0;
  public leavingSlide = null;
  public enteringSlide = null;
  public thumbnailToShow = null;
  public containerBackgroundColor = '#FFF';
  public timeout;
  public interval;
  public progressHeight = 0;


  constructor(
    private slide: SlideService
  ) { }

  ngOnInit() {
    this.slide.getSlides().subscribe(ret => {
      this.slides = ret;
      this.changeActiveSlide(0);
    });
  }

  public changeActiveSlide(index){
    if(this.timeout !== undefined) clearTimeout(this.timeout);
    if(this.interval !== undefined) clearInterval(this.interval);
    this.activeSlide = index;
    this.containerBackgroundColor = this.slides[index].background_color;
    this.progressHeight = 0;

    if(this.slides.length > 1){
      this.timeout = setTimeout(() => {
        this.changeActiveSlide(this.nextIndex(index));
        this.increaseProgress(index);
      }, (this.slides[index].show_seconds * 1000));
    }

    /*
    OUT AND IN TRANSITION
    this.leavingSlide = this.activeSlide;
    setTimeout(() => {
      this.enteringSlide = index;
    }, 300);
    
    setTimeout(() => {
      this.leavingSlide = null;
      this.enteringSlide = null;
      this.activeSlide = index;
    }, 600);

    */
  }

  private increaseProgress(index){
    this.interval = setInterval(() => {
      if(this.progressHeight < 100){
        this.progressHeight = this.progressHeight + (100 / this.slides[this.nextIndex(index)].show_seconds);
      }
    }, 1000);
  }

  public showThumb(index){
    return (this.thumbnailToShow === index)
  }

  public toEnter(index){
    return this.toEnter === index;
  }

  public active(i){
    return this.activeSlide === i;
  }

  public inactive(i){
    return i !== this.activeSlide &&
    i !== this.enteringSlide
  }

  public leaving(i){
    return i === this.leavingSlide;
  }

  public entering(i){
    return i === this.enteringSlide;
  }

  private nextIndex(currentIndex){
    return ((this.slides.length - 1) === currentIndex) ? 0 : (currentIndex + 1);
  }
}
