var assert = require('assert');
var assert = require('chai').assert;
var expect = require('chai').expect;
var pair = require("../js/pair.js");
var bonjour = require("../js/bonjour.js");
var secusoc = require("../js/secusoc.js");

describe('Array', function() {

  describe('#indexOf()', function() {

    it('should return -1 when the value is not present', function() {
      assert.equal([1,2,3].indexOf(4), -1);
    });

  });

});

describe('MesTests', function() {

  describe('Pair', function() {

  	it('EXPECT : return false si nombre 3 impaire', function() {
      expect(pair(3)).to.equal(false);
    });
    it('EXPECT : return true si nombre 6 paire', function() {
      expect(pair(6)).to.equal(true);
    });
    it('ASSERT : return true si nombre 4 pair', function() {
      assert.isTrue(pair(4), "nombre pair");
    });
    it('ASSERT : return false si nombre -1 impaire', function() {
      assert.isFalse(pair(-1), "nombre impair");
    });
    it('ASSERT : return true si nombre 0 paire', function() {
      assert.isTrue(pair(0), "nombre pair");
    });
    it('ASSERT : return true si nombre -20 paire', function() {
      assert.isTrue(pair(-20), "nombre pair");
    });


  });

  describe('Bonjour', function() {

    it('EXPECT : Bonjour, Adèle', function() {
      expect(bonjour("Adèle")).to.equal("Bonjour, Adèle");
    });
    it('ASSERT : Bonjour, Bob', function() {
      assert.equal(bonjour("bob"), "Bonjour, bob", "bob marche");
    });
    it('ASSERT : vérification ?', function() {
      assert.equal(bonjour("?"), "Bonjour, ?", "? marche");
    });
    it('ASSERT : vérification §', function() {
      assert.equal(bonjour("§"), "Bonjour, §", "§ marche");
    });
    it('ASSERT : vérification chiffre', function() {
      assert.equal(bonjour("0123456789"), "Bonjour, 0123456789", "chiffres marche");
    });

  });

  describe('Sécu', function() {

    it('EXPECT : numéro de sécu valide', function() {
      expect(secusoc(162134504405658)).to.equal(true);
    });
    it('EXPECT : numéro de sécu invalide', function() {
      expect(secusoc(162134504405659)).to.equal(false);
    });
    it('ASSERT : numéro sécu valide', function() {
      assert.isTrue(secusoc(162134504405658), "renvoie Vrai");
    });
    it('ASSERT : numéro sécu invalide', function() {
      assert.isFalse(secusoc(162134504405659), "renvoie faux");
    });
    

  });


});

