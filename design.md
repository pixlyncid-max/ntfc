---
name: Nusantara Tax & Finance
colors:
  surface: '#131313'
  surface-dim: '#131313'
  surface-bright: '#393939'
  surface-container-lowest: '#0e0e0e'
  surface-container-low: '#1c1b1b'
  surface-container: '#20201f'
  surface-container-high: '#2a2a2a'
  surface-container-highest: '#353535'
  on-surface: '#e5e2e1'
  on-surface-variant: '#cfc4c5'
  inverse-surface: '#e5e2e1'
  inverse-on-surface: '#313030'
  outline: '#988e90'
  outline-variant: '#4c4546'
  surface-tint: '#c6c6c6'
  primary: '#c6c6c6'
  on-primary: '#303030'
  primary-container: '#000000'
  on-primary-container: '#757575'
  inverse-primary: '#5e5e5e'
  secondary: '#c6c6c7'
  on-secondary: '#2f3131'
  secondary-container: '#454747'
  on-secondary-container: '#b4b5b5'
  tertiary: '#95ccff'
  on-tertiary: '#003352'
  tertiary-container: '#000000'
  on-tertiary-container: '#007bbd'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#e2e2e2'
  primary-fixed-dim: '#c6c6c6'
  on-primary-fixed: '#1b1b1b'
  on-primary-fixed-variant: '#474747'
  secondary-fixed: '#e2e2e2'
  secondary-fixed-dim: '#c6c6c7'
  on-secondary-fixed: '#1a1c1c'
  on-secondary-fixed-variant: '#454747'
  tertiary-fixed: '#cde5ff'
  tertiary-fixed-dim: '#95ccff'
  on-tertiary-fixed: '#001d32'
  on-tertiary-fixed-variant: '#004a75'
  background: '#131313'
  on-background: '#e5e2e1'
  surface-variant: '#353535'
typography:
  display:
    fontFamily: Inter
    fontSize: 80px
    fontWeight: '700'
    lineHeight: 88px
    letterSpacing: -0.04em
  headline-lg:
    fontFamily: Inter
    fontSize: 48px
    fontWeight: '600'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.01em
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
    letterSpacing: 0em
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
    letterSpacing: 0em
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.05em
  mono:
    fontFamily: Courier Prime
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
    letterSpacing: 0em
spacing:
  unit: 8px
  gutter: 24px
  margin-desktop: 64px
  margin-mobile: 20px
  column-count: '12'
---

## Brand & Style

This design system is rooted in the International Typographic Style (Swiss Design), emphasizing clarity, objectivity, and a structural mathematical order. It is designed for high-stakes financial consulting where precision is the primary value proposition. 

The aesthetic is characterized by **Minimalism** and **Modernism**, stripping away decorative elements to favor functional hierarchy. The interface functions as a modular grid where information is organized into clear blocks. Expect heavy use of whitespace to reduce cognitive load, paired with aggressive typographic scales that signal authority and confidence.

## Colors

The palette is intentionally restricted to maintain a professional, high-contrast environment.

*   **Primary Background (#000000):** Pure black serves as the foundation, providing a "void" that allows white typography to pop with maximum legibility.
*   **Primary Content (#FFFFFF):** Used for all primary headings and body text to ensure AA/AAA accessibility compliance and a sharp, clinical feel.
*   **Accent (#048CD6):** Electric Blue is used sparingly for interactive states, call-to-actions, and data visualization highlights. It represents modern technology within the traditional finance sector.
*   **Structural Neutral (#1A1A1A):** A secondary dark grey used for surface containers, differentiating the background from interactive modules without breaking the monochromatic theme.

## Typography

Typography is the core structural element of this design system. We use **Inter** for its neutral, systematic character and excellent legibility at extreme scales.

*   **Hierarchy:** Use dramatic size contrasts to guide the eye. Headlines should be tight (low line-height) and slightly kerned in (negative letter spacing) to feel like solid blocks of information.
*   **Alignment:** Stick to a strict flush-left, ragged-right alignment. Avoid centered text to maintain the Swiss aesthetic's dynamic balance.
*   **Data:** For financial tables and tax codes, use the monospaced font to ensure numerical alignment and a technical, precise feel.

## Layout & Spacing

This design system employs a **strict mathematical grid**. All components must align to a 12-column grid on desktop and a 4-column grid on mobile.

*   **Modular Blocks:** Content should be grouped into rectangular modules. Use thin dividers (0.5px) rather than cards with shadows to separate these modules.
*   **Whitespace:** Use generous margins (64px+) to isolate key messages. The "active" negative space is what creates the premium, consulting-grade feel.
*   **Asymmetry:** While the grid is strict, the content should be placed asymmetrically. For example, a headline might span 8 columns while the supporting body text spans only 4 columns in a separate row.

## Elevation & Depth

In keeping with the International Typographic Style, depth is conveyed through **Tonal Layers** and **Bold Outlines** rather than shadows.

*   **Flatness:** Avoid drop shadows entirely. Surface depth is achieved by placing #1A1A1A (neutral) containers on the #000000 (primary) background.
*   **Dividers:** Use 0.5px to 1px solid white lines at 20% opacity to create structural boundaries. These lines should extend to the edges of the grid columns.
*   **Focus:** When an element needs to be elevated (like a modal), use a thick 2px Electric Blue border to indicate its priority, keeping the surface flat and opaque.

## Shapes

The shape language is **Sharp (0px)**. 

Every UI element—including buttons, input fields, and containers—must have perfectly square corners. This reinforces the architectural and mathematical nature of the design system. Roundness is perceived as "soft" or "casual," which contradicts the brand's goal of precision and credibility.

## Components

### Buttons
*   **Primary:** Solid Electric Blue (#048CD6) background, white text, 0px radius. High-impact.
*   **Secondary:** Ghost style. 1px white border, white text, 0px radius. No background.
*   **Hover State:** Primary buttons shift to a slightly lighter blue; secondary buttons fill with white and invert the text color to black.

### Input Fields
*   Bottom-border only (1px white). This mimics high-end stationery and minimizes visual clutter. 
*   Labels sit above the input in the `label-sm` style (uppercase, bold).
*   Error states use a red border but retain the 0px sharp corners.

### Cards & Modules
*   Do not use shadows.
*   Define boundaries using thin white dividers or a slight background shift to #1A1A1A.
*   Content within modules should follow the 8px spacing unit for internal padding.

### Data Tables
*   Strict horizontal rules between rows. No vertical rules.
*   Header row in `label-sm` with a thicker 2px top border.
*   Numeric data should use the Monospaced font for vertical alignment of decimals.

### Progress Indicators
*   Linear, 2px height. Use Electric Blue for the filled portion and #1A1A1A for the track.