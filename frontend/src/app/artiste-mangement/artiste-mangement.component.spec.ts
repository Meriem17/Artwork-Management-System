import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ArtisteMangementComponent } from './artiste-mangement.component';

describe('ArtisteMangementComponent', () => {
  let component: ArtisteMangementComponent;
  let fixture: ComponentFixture<ArtisteMangementComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ArtisteMangementComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(ArtisteMangementComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
