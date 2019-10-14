import { TestBed } from '@angular/core/testing';

import { MegamenuService } from './megamenu.service';

describe('MegamenuService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: MegamenuService = TestBed.get(MegamenuService);
    expect(service).toBeTruthy();
  });
});
