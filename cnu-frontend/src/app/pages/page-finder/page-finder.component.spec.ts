import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PageFinderComponent } from './page-finder.component';

describe('PageFinderComponent', () => {
  let component: PageFinderComponent;
  let fixture: ComponentFixture<PageFinderComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PageFinderComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PageFinderComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
