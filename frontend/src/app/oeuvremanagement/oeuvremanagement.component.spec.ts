import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OeuvremanagementComponent } from './oeuvremanagement.component';

describe('OeuvremanagementComponent', () => {
  let component: OeuvremanagementComponent;
  let fixture: ComponentFixture<OeuvremanagementComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ OeuvremanagementComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(OeuvremanagementComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
