import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ImageMangementComponent } from './image-mangement.component';

describe('ImageMangementComponent', () => {
  let component: ImageMangementComponent;
  let fixture: ComponentFixture<ImageMangementComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ImageMangementComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ImageMangementComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
