import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { appRoutingComponents, AppRoutingModule } from './app-routing.module';
import { MaterialModule } from './material/material.module';

import { AppNavComponent } from './components/app-nav/app-nav.component';
import { LogoComponent } from './components/logo/logo.component';
import { FooterComponent } from './components/footer/footer.component';


@NgModule({
  declarations: [
    AppComponent,
    AppNavComponent,
    LogoComponent,
    appRoutingComponents,
    FooterComponent
  ],
  imports: [
    BrowserModule.withServerTransition({ appId: 'nestJS' }),
    HttpClientModule,
    MaterialModule,
    AppRoutingModule
  ],
  providers: [],
  entryComponents: [
    AppNavComponent,
    LogoComponent,
    FooterComponent
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
