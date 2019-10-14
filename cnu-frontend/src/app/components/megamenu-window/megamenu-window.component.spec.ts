import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MegamenuWindowComponent } from './megamenu-window.component';

describe('MegamenuWindowComponent', () => {
  let component: MegamenuWindowComponent;
  let fixture: ComponentFixture<MegamenuWindowComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MegamenuWindowComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MegamenuWindowComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
