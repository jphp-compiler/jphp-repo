# UXInnerShadowEffect

- **class** `UXInnerShadowEffect` (`php\gui\effect\UXInnerShadowEffect`) **extends** [`UXEffect`](https://github.com/jphp-compiler/jphp/blob/master/exts/jphp-gui-ext/api-docs/classes/php/gui/effect/UXEffect.md)
- **package** `gui`
- **source** `php/gui/effect/UXInnerShadowEffect.php`

**Description**

Class UXInnerShadowEffect

---

#### Properties

- `->`[`blurType`](#prop-blurtype) : `string ONE_PASS_BOX, TWO_PASS_BOX, THREE_PASS_BOX, GAUSSIAN`
- `->`[`color`](#prop-color) : `UXColor`
- `->`[`radius`](#prop-radius) : `double`
- `->`[`offsetX`](#prop-offsetx) : `float`
- `->`[`offsetY`](#prop-offsety) : `float`
- `->`[`width`](#prop-width) : `double`
- `->`[`height`](#prop-height) : `double`
- `->`[`size`](#prop-size) : `float[] width + height`
- See also in the parent class [UXEffect](https://github.com/jphp-compiler/jphp/blob/master/exts/jphp-gui-ext/api-docs/classes/php/gui/effect/UXEffect.md)

---

#### Methods

- `->`[`__construct()`](#method-__construct)
- See also in the parent class [UXEffect](https://github.com/jphp-compiler/jphp/blob/master/exts/jphp-gui-ext/api-docs/classes/php/gui/effect/UXEffect.md)

---
# Methods

<a name="method-__construct"></a>

### __construct()
```php
__construct(double $radius, UXColor|string $color, double $offsetX, double $offsetY): void
```